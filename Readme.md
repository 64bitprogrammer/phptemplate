# Basic guidelines to follow when writing new code

add description about folder structure here 

## PHP
- Use variable names with underscore to separate words. All lowecase.
- Use underscore separated by word as name for function.

## SQL
- use table_name for tables
- user column_name for columns
- boolean column should have has_ , does_ or is_ in name
- timestamp column suffix _at
- date should suffix _date

- keep identity column name as id so you can access it later as employee.id, location.id, file.id

## HTML
- class name should be like class-name
- id should be in camel case form
- name should be in camel case form

## CSS


## JS
- Avoid using jQuery as much as possible.
- Write clean code
- Use underscore separated by word as name for function.


### Good Practices
- If a portion of code is going to repeat more than twice, convert it into function
- Always use prepared statements when hadling any sort of user input / All queries
- 

### Project Development Mode
1. Database Design
    a. User Access Control
2. Front End Design [ Page Wise ]
3. Back End Coding [ Page Wise ]
4. Backup feature to periodically backup data to server / remote location [ preferably early morning between 2am - 4am]