# Printer-System

a live code printing system for large acm live contest printing jobs.

### 1. Installations

Testing System: Ubuntu 18.04 LTS

Based on: PHP + Apache2

```
sudo apt-get install apache2
sudo apt-get install php7.0
sudo apt-get install libapache2-mod-php7.2
```

### 2. Composed

Copy code into `var/www/html`.

Actually you could also redirect the apache2 index to your path!

The page loads on `http://localhost:80/`

### 3. Code Structure

- `./Code` for printed codes
- `./namelist` for teams' name and password
- `./index.html` for home page
- `./print.php` for printing settings
  - Printing command: `lpr -o prettyprint <filename>`

### 4. Bugs

- Counld not suppose to Chinese

