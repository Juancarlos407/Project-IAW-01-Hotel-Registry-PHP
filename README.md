# Projecte-IAW-01-Hotel-Registry-PHP

Este proyecto está destinado a crear un form que es validado, escrito en código php y gestionado desde un servidor web.

## La página cuenta con un archivo clientForm.php con los siguientes contenidos:

1.1. Window title with the hotel name ok

1.2. Title in the head section ok

1.3. Title in the body section ok

1.4. text controls to input in the system: ok

Client name / Client surname / Age / Email / Country / Check in / Check out / Deposit 

1.5. Option controls to input: ok

Female / Male

1.6. Select control to input: ok

Single / King size / Double / Triple / Quadruple

1.7. Checkbox control to accept the data protection policy ok

1.8. A form control that includes all input data controls in the previous points and sends the page to a formValidation.php when the user click on the submit button. Using the POST method to not showing all parameters in the url. ok

## Y otro archivo formValidation.php que se encarga de:

2.1. All controls are compulsory. ok

2.2. Client has to type 2 surnames  //falta

2.3. Client has to type numbers in the controls that required it. Also it cannot be characters in controls where the client has to type numbers. ok

2.4. Date when the client check in has to be later than today //falta

2.5. Date when the client check out has to be later than check in date //falta

2.6. Deposit has to be greater than 100 ok

2.7. Show the deposit in € and £ currency. To convert euros into pounds multiply by 1,17. //falta

2.8. All functions show a message in the screen with a control label. ok

## Para hacer comprobaciones:

Puedes Probar la web [Aquí](https://fandoshotel.000webhostapp.com/clientForm.php)
