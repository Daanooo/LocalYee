# LocalYee

## Project overview and functionality
LocalYee is a web interface that lets you add your Yeelight devices and control them locally via a web interface. This project has been created to allow local control in a simple way without always being dependent on the Yeelight servers. 

### Add new devices to the database
Create a new device via the web interface which will be added to the database. This includes the following data
 - IP address (**mandatory**)
 - Port (**mandatory**, *default 55443*)
 - Device name (**optional**)
 - Device location (**optional**)

### Control your existing devices
Via the web interface you can control your device to perform various action, this includes:
- Checking various device data (status, color, location, etc)
- Toggling the power of the device
- Changing the color of the lights (or temperature in case of a white-only bulb)
- *More to be added...*

&nbsp;

## Used technologies
- PHP with Laravel or Symfony for the front and back-end
- PostgreSQL as the database
