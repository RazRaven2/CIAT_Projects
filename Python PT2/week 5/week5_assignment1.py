# Complete activities under Algorithm Workbench Chapter 10 - Question 3:

# Look at the following description of a problem domain:

# The bank offers the following types of accounts to its customers: 
#savings accounts, checking accounts, and money market accounts. 
#Customers are allowed to deposit money into an account (thereby increasing its balance), 
#withdraw money from an account (thereby decreasing its balance), 
#and earn interest on the account. Each account has an interest rate.

# Assume that you are writing a program that will calculate the amount of 
#interest earned for a bank account.

# Identify the potential classes in this problem domain.
# Refine the list to include only the necessary class or classes for this problem.
# Identify the responsibilities of the class or classes.
 

# Lastly, write a class definition named Checking Account that allows to get/set 
#initial balance, make a deposit and withdraw money from it. 
#Write  statements that use the Checking Account class to call  these methods. 


#Assignment requested class:

class CheckingAccount():
     def __init__(self, balance):
          self._balance = balance
     
     @property
     def balance(self):
          return self._balance
     @balance.setter
     def balance(self, value):
          self._balance = value

     def withdrawal(self, value):
          self.balance -= value
    
     def deposit(self, value):
          self.balance += value


my_account = CheckingAccount(100.00)
sentinal = True
while sentinal:
     print(f"Manage Checking Account: ",
           f"\n1.View Balance",
           f"\n2.Deposit",
           f"\n3.Withdrawal")
     selection = input("Select 1, 2, 3 or quit: ")
     if selection == "1":
          print(f"\nYour Balance: {my_account.balance:.2f}\n")
     elif selection == "2":
          value = float(input("Enter deposit value: "))
          my_account.deposit(value)
     elif selection == "3":
          value = float(input("Enter withdrawal amount: "))
          my_account.withdrawal(value)
     elif selection == "quit":
          sentinal = False
     else:
          print("\nIncorrect Entry\n")