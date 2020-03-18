# What is this
This is an application that accesses a shared folder on my Google Drive and lists all files inside of it.

# How to setup
- Clone the repo to your local machine
- Navigate to the folder using terminal or cmd
- Install dependencies using `composer install`
- Configure database credentials in .env
- Run migrations using `php artisan migrate`

# Routes
There are three (3) total routes in the application.
- / => The index route which indexes all the locally saved files.
- /store => Connects to google drive, accesses the files and saves them to the local database.
- /truncate => Deletes all locally stored files

# NOTE
- When using /store, it will truncate all the files that are locally saved and will replace them with the new fetched files from Google Drive.
- I used the google service account authentication method instead of using OAuth2 to make it easier to download and setup on different machines and because I don't have a valid URL to use as a redirect URL since the usage of Google Api requires a valid redirect URL.
- The folder being accessed is https://drive.google.com/drive/folders/12ezEA9Pt9wIEJlRZi7TyI9kPC-Htlcq_ which is publicly available to everyone. Any file added there will be available for listing using this application.
