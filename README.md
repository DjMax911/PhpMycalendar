
# PhpMyCalendar v1.0  

PhpMyCalendar v1.0 is a simple and lightweight PHP-based calendar script. This project serves as the foundation for future enhancements, such as creating a full-fledged agenda and scheduler system.  

## Demo
- https://djmax911.com/PhpMycalendar/calendar.php

## Features  
- **Basic Calendar View:** Display days, weeks, and months in a simple interface.  
- **PHP-Powered:** Easily integratable with other PHP projects.  
- **Future-Ready:** Designed to evolve into a more comprehensive agenda and scheduler system.
## Setting
- Available in the conf file
```
// Calendar
define('CALENDAR_START',            '946702800');       // Sat Jan 01 2000 05:00:00 GMT+0000
define('CALENDAR_STOP',             '7258136399');      // Wed Jan 01 2200 04:59:59 GMT+0000
define('CALENDAR_WEEK',             7);                 // Number of days in a week
define('CALENDAR_WEEK_START',       6);                 // 0 (for Sunday) through 6 (for Saturday) as per PHP date(w)

// Style
define('CALENDAR_TH_HEIGHT',        40);                // Height of the table header cell (px)
define('CALENDAR_TD_HEIGHT',        80);                // Height of the table body cell (px)

```

## Usage  
PhpMyCalendar v1.0 is designed for developers to customize and expand. You can use this script as-is or as a starting point for building more complex calendar functionalities.  

### Future Goals  
- Add event creation and management.  
- Implement user authentication and permissions.  
- Include recurring events and reminders.  
- Integrate with external APIs (e.g., Google Calendar).  

## Requirements  
- PHP 7.4 or higher.  
- A web server like Apache or Nginx.  

## Contributing  
Contributions are welcome! If you'd like to improve PhpMyCalendar, please fork the repository and submit a pull request.  

## License  
This project is licensed under the [MIT License](LICENSE).  

## Author  
Developed by DjMax911.  
