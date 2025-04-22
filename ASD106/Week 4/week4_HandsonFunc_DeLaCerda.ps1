#Define a function called GreetUser that takes a parameter for 
#the user's name and displays a personalized greeting message.
function GreetUser{
     param (
         [string[]]$name
     )

     Write-Host "Hello $name! Welcome!!!"
}

#Define a function called GetSum that takes two parameters 
#for numbers and returns their sum.
function GetSum{
     param (
          [int]$num1,
          [int]$num2
     )
     return $num1 + $num2

}

#Define a function called IsEven that takes a parameter for a number and 
#checks if it is even or odd. The function should return "Even" or "Odd" accordingly.
function IsEven {
     param(
          [int]$num3
     )
     if($num3 % 2 -eq 0){
          return "Even"
     }
     else {
          return "Odd"
     }
}

#Prompt the user to enter their name.
$nameUser = Read-Host -Prompt "Please enter your name"

#Call the GreetUser function, passing the user's name as an argument.
GreetUser -name $nameUser

#Prompt the user to enter two numbers.
$num1 = Read-Host -Prompt "Enter a number for sum"
$num2 = Read-Host -Prompt "Enter another number for sum"

#Call the GetSum function, passing the two numbers as arguments, and display the result.
$sum = GetSum -num1 $num1 -num2 $num2
Write-Host "The sum is $sum"
#Prompt the user to enter a number.
$num3 = Read-Host -Prompt "Enter a number"

#Call the IsEven function, passing the number as an argument, and display the result.
$evenOrodd = IsEven -num3 $num3
Write-Host "The number is $evenOrodd"