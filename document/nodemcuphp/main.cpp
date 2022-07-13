#include <Arduino.h>
#include <ESP8266WiFi.h>

// Network ID
const char* ssid     = "Redmi Note 7_9813";
const char* password = "00001111";
const char* host = "192.168.43.27";
const int port = 80;

// Current time
unsigned long currentTime = millis();
// Previous time
unsigned long previousTime = 0; 
// Define timeout time in milliseconds (example: 2000ms = 2s)
const long timeoutTime = 2000;

void setup() {
  // NodeMCU Utility
  Serial.begin(9600);
  dht.begin();

  // Networking
  Serial.print("Connecting to ");
  Serial.println(ssid);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("WiFi connected.");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}

void loop(){
  WiFiClient client;
  
  if (!client.connect(host, port)) {
    Serial.println("Connection failed");
    return;
  }

  // DHT get temp dan humid
  float sph = random(6, 8);
  float stemps = random(26, 29);
  float stempd = random(26, 29);
  float stempt = random(26, 29);
  float sfd = random(50, 55);
  float swd = random(60, 75);
  float swf = random(60, 90);

  // /nodemcuphp/index.php?mode=save&vph=20&vtemps=20&vtempd=20&vtempt=20&vfd=20&vwd=20&vwf=20
  String apiUrl = "/nodemcuphp/index.php?";
  apiUrl += "mode=save";
  apiUrl += "&vph="+String(sph);
  apiUrl += "&vtemps="+String(stemps);
  apiUrl += "&vtempd="+String(stempd);
  apiUrl += "&vtempt="+String(stempt);
  apiUrl += "&vfd="+String(sfd);
  apiUrl += "&vwd="+String(swd);
  apiUrl += "&vwf="+String(swf);

  // Set header Request
  client.print(String("GET ") + apiUrl + " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" +
               "Connection: close\r\n\r\n");

  // Pastikan tidak berlarut-larut
  unsigned long timeout = millis();
  while (client.available() == 0) {
    if (millis() - timeout > 3000) {
      Serial.println(">>> Client Timeout !");
      Serial.println(">>> Operation failed !");
      client.stop();
      return;
    }
  }

  // Baca hasil balasan dari PHP
  while (client.available()) {
    String line = client.readStringUntil('\r');
    Serial.println(line);
  }
}
