# Slide Synopsis
## CMS Basics and Wordpress Installation
- helps users create, manage, and modify content on a website without the need for specialized technical knowledge
- How does a CMS work?
  - creating content in html
  - creating content in WP
- What makes up a CMS
  - Content Management Application
    - this is the part that allows you to actually add and manage content on your site
  - Content Delivery Application (CDA) 
    - this is the backend, behind-the-scenes process that takes the content you input in the CMA, stores it properly, and makes it visible to your visitors
- What can you buld with a CMS?
  - Flexible. You can build most types of websites.
    - Static websites 
    - Blogs 
    - eCommerce 
    - Forums
    - Social networks 
    - Online courses 
    - Membership sites 
    - Portfolios
    - and more!
- Wordpress stats
  - One of the most popular open source content management systems available.
  - 33% of all websites are powered by WordPress
  - Built in 2003 by Matt Mullenweg and Mike Little
  - Licensed under the GPL, version 2
- What you need to know
  - Before installing WordPress, you generally need:
    - Access to your web server (we're installing locally today)
    - Ability to create MySQL databases (where information from our site is stored)
    - A text editor
    - An FTP client
    - Your web browser of choice
## Local Installation: Option 1
1. Install XAMPP
2. Create a database and give it a user
3. Download WordPress
4. Edit wp-config.php
5. Add WordPress files to htdocs inside XAMPP folder 6. Run the installation script

## Activity: Download and Install XAMPP
- Go to https://www.apachefriends.org/download.html and download and install the 7.3.2 version of XAMPP.
- Open XAMPP Control Panel
- Start MySQL and Apache
- Type localhost into your browser.

## Errors with running Apache
- You may get an error saying that Apache won't start because ports are being used by another program.
- If that happens to you, click on Config next to Apache, choose httdp.conf and change Port 80 to Port 8080. Then click Config again and choose httdp-ssl.conf and change Port 443 to Port 4433.

## Create a Database
1. Now that XAMPP is running, click Admin next to MySQL
2. Click New
3. Add your database name (sait_wordpress) and click Create.

## Installing Wordpress
- Go to https://wordpress.org/download/ and download the latest version of WordPress
- Unzip this folder into C:/Program Files/XAMPP/htdocs
- Rename the wordpress folder to sait-wp
Notes: This sait-wp folder will be used for all in-class activities. You will need to create new wordpress installations for each site you create.

## Editing wp-config.php
- In your WordPress files, you'll  nd a  le called wp-config- sample.php. Rename this file to wp-config.php.
- Open it up in VS Code to edit it. Add your database name, change user to root, and leave password blank.

## Activity: Install Wordpress
- Open up your browser and go to localhost/sait-wp. You should see an installer with a list of languages.
- Go through each step creating a website with a title, username, password, email of your choice.

## Log in
- Now you should be able to log in with the username and
password you just created. Congratulations!

## Dashboard Tour

## Create a Child Theme
- Never edit directly on a WordPress theme. Create a child theme so that your changes aren't overwritten when the theme gets an update.
- Inherits the look and feel of the parent theme and all of its functions, but can add modifications.

## Step 1: Create a Child Theme Folder
1. Create a child theme folder in wp-content/themes
2. Name it based on the name of your parent theme parentTheme-
child

For this class, we're using the Twenty Nineteen theme, so name your child theme twentynineteen-child.

## Step 2: Create a stylesheet
1. Inside your child theme folder, create a stylesheet file named style.css.
2. Add the following required header information and replace with your information. needs to be unique. Template and must be the same as the parent theme.

## Step 3: Enqueue Stylesheet
1. Create a functions.php file.
2. Add the following code which makes sure that your parent stylesheet AND your stylesheet are both used and that your stylesheet is loaded after the parent stylesheet.

## Detective Work: Finding $HANDLE
1. Replace parent-style with the same $handle used in the parent theme when it registers its stylesheet.
2. Find this by searching for get_stylesheet_uri() in the parent theme's functions.php. Just before this, the handle name is in single quotes.
3. Replace all my_ occurances in the code with your child theme text
domain.

## Upload and activate your child theme
1. Create a .zip file of your new child theme 
2. Upload it on Appearance -> Theme.
3. Activate your theme!