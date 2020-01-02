# ProjecteProjecte-IAW-01-Hotel-Registry-PHP

Este proyecto está destinado a crear un form que es validado escrito en código php gestionado desde un servidor web.

## La página cuenta con un archivo clientForm.php con los siguientes contenidos:

1.1. Window title with the hotel name

1.2. Title in the <head> section

1.3. Title in the <body> section

1.4.text controls to input in the system:

Client name
Client surname
Age 
Email
Country
Check in
Check out
Deposit

1.5. Option controls to input:

Female
Male

1.6. Select control to input:

Single
King size
Double
Triple
Quadruple

1.7. Checkbox control to accept the data protection policy

2. A form control that includes all input data controls in the previous point and sends the page to a formValidation.php file when the user click on the submit button. Using the right method to not showing all parameters in the url.

## Y otro archivo formValidation.php que se encarga de:

3.1. All controls are compulsory. 

3.2. Client has to type 2 surnames 

3.3. Client has to type numbers in the controls that required it. Also it cannot be characters in controls where the client has to type numbers.

3.4. Date when the client check in has to be later than today

3.5. Date when the client check out has to be later than check in date

3.6. Deposit has to be greater than 100

3.7. Show the deposit in € and £ currency. To convert euros into pounds multiply by 1,17.

3.8. All function/s have to show a message in the screen with one of the labels bellow:

a) Control label: correct

b) Control label: incorrect


Puedes Probar [Aquí](https://rawgit.com/)

HTML validado [Aquí](https://validator.w3.org)

PHP validado [Aquí](https://phpcodechecker.com/)
