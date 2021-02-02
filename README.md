# Pizza-Ordering-Web-App
Pizza ordering web application using PHP, Ajax, jQuery

============= App Description ========================
- A simple web application that allows customers to customize their pizza by adding toppings and at the end of the application they are presenter with the order summary where they can either confirm or decline and go back to 1st page.
- This website does not handle any money transactions or other advance options, it is just a simple way of implementing jQuery and Ajax to give a feeling of a real interactive website.

==============SET-UP ISS=================
In order to run this web page, you need to be running ISS on you computer. Here are steps you should take to set up ISS.
1) Control Panel -> Programs and Features -> (left side) Turn Windows Features on or off
2) Make sure to only check following under “Internet Information Services”:
•	Web Management Tools
  o	IIS Management Console
•	World Wide Web Services
  o	.Net Extensibility 3.5
  o	ASP
  o	ASP.NET 3.5
  o	CGI
  o	ISAPI Extensions
  o	ISAPI Filters
  o	Server-Side Includes
•	Common HTTP features
  o	Default Document
  o	Directory Browsing
  o	HTTP Errors
  o	Static Content
•	Health and Diagnostics
  o	HTTP logging 
3) Open IIS (Internet Information Service)
4) Under “connections” find your computer’s name and right click on it -> Sites-> (right click) Default Web Site -> Manage Websites -> Stop
5) (right click) Sites -> Add Website…
6) Give your Site a name and chose a path in your computer where the root of your ISS will be (for example c:\localWebSite)
7) Click Ok, then yes
8) In the “Connections” panel click on application Pools -> double click on the site you’ve created.
9) Change it to .NET CLR Version v2.0.50727, click OK
10) Select your website in the “connections” panel and set ‘Enable Parent Paths’ to true and under Debugging Properties find ‘Send Errors To Browser’ to true.
11) In order to download and set-up PHP follow this tutorial from Microsoft’s website:		                https://docs.microsoft.com/en-us/iis/application-frameworks/scenario-build-a-php-website-on-iis/configuring-step-1-install-iis-and-php#13-download-and-install-php-manually

Once you have followed all the steps, place the code in your root folder. Open a browser and search for localhost/MainPage.html this should load the first page of the application if it is located in the root of your IIS.
