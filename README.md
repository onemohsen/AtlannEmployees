

## About Atlann Employees!

Description:

- There are two user types: employee and admin.
- the employee user can log in to the system and add his/her tasks that were done today.
- Each task has these fields: Name, Note, Time (current day inserted as date).
- Employee users can see a list of tasks that have been added to update/delete them.
- Admin user can see the report of all employees' tasks.
- admin can filter reports by date.
- Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Install

**1:**
```html
git clone https://github.com/onemohsen/AtlannEmployees.git
```

**2:**
```html
composer install
```

**3:**
```html
npm install && npm run production
```

**4:**
Change .env File Db Config And Create Database
```html
DB_DATABASE=atlan
DB_USERNAME=root
DB_PASSWORD=
```

**5:Finally**
```html
php artisan migrate --seed

php artisan serve
```
**User Information Default:**
```html
admin:
email:admin@admin.com
pass:admin

user 1:
email:user1@user.com
pass:user1

user 2:
email:user2@user.com
pass:user2

user 3:
email:user3@user.com
pass:user3

```
