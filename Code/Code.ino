#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>
#include "DHT.h"

const char *ssid = "Redmi 8A Pro";  
const char *password = "12345Admin";
const char *host = "http://dht11system.000webhostapp.com";

#define DHTPIN 4
#define DHTTYPE DHT11
DHT dht(DHTPIN, DHTTYPE);

void setup() {
  dht.begin();
  delay(100);
  Serial.begin(9600);
  WiFi.mode(WIFI_OFF); 
  delay(100);
  WiFi.mode(WIFI_STA); 
  WiFi.begin(ssid, password);    
  Serial.println("");
  Serial.print("Connecting");

  while (WiFi.status() != WL_CONNECTED) {
    delay(100);
    Serial.print(".");
  }

  Serial.println("");
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP()); 
}

void loop() {
  HTTPClient http;

  String temperature, humidity, getData, Link;

  temperature = dht.readTemperature();
  humidity = dht.readHumidity();

  getData = "?suhu=" + temperature + "&kelembapan=" + humidity ; 
  Link = "http://dht11system.000webhostapp.com/input.php" + getData;
  
  http.begin(Link);    

  int httpCode = http.GET();           
  String payload = http.getString();

  Serial.println(httpCode);   
  Serial.println(payload);  

  http.end(); 
  
  delay(500);  
}
