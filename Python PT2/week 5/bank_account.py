#Create a Bank Account class that does the following:
#offers three account types:checking, savings, moneymarket
#Allow Customers to make deposits, withdraw, earn interest

import datetime

#class for account types
class Account:
     def __init__(self, account_type):
          self._account_type = account_type
          self._balance = 0
          if account_type == "Checking":
               self._interest = 0
          elif account_type == "Savings":
               self._interest = .5
          elif account_type == "Money Market":
               self._interest = .2
          self._record = {
               "test":"test"
          }

     @property
     def account_type(self):
          return self._account_type
     @account_type.setter
     def account_type(self, value):
          self._account_type = value

     @property
     def balance(self):
          return self._balance
     @balance.setter
     def balance(self, value):
          self._balance = value

     @property
     def interest(self):
          return self._balance
     @interest.setter
     def interest(self, value):
          self._interest = value

     @property
     def record(self, date):
          return self._record(date)
     @record.setter
     def record(self, date, value):
          self._record(date).update(value)

     def apr_earnings(self, rate):
          return self.balance*self.interest*1
     


#class for customer with actions
class Customer:
     def __init__(self, account, name, passcode) -> None:
          self._username = name
          self._passcode = passcode
          self._accounts = [Account(account)]
     
     @property
     def username(self):
          return self._username
     @username.setter
     def username(self, value):
          self._username = value
     
     @property
     def passcode(self):
          return self._passcode
     @passcode.setter
     def passcode(self, value):
          self._passcode = value

     @property
     def accounts(self):
          return self._passcode
     @accounts.setter
     def accounts(self, index, value):
          self.accounts[index] = value

     def create_account(self, value):
          self.accounts.append(value)     
     
     def deposit(self, account_index, value):
          self.account[account_index] += value

def main():
     customer_list = {"":""}
     
     sentinal = "y"
     while sentinal == "y":
          option = input("\n1.Create new account \n2.Login\n3.Quit \nChoose an option(1,2,3): ")
          if option == "1":
               name = input("Enter customer name: ")
               passcode = input("Enter new passcode")
               print(f"Enter account type: ",
                    f"\n1. Checking",
                    f"\n2. Savings", 
                    f"\n3. Money Market")
               selection = input("(1, 2, or 3): ")
               
               if selection == "1":
                    account = "Checking"
               elif selection == "2":
                    account = "Savings"
               elif selection == "3":
                    account = "Money Market"
               
               new_customer = Customer(account, name, passcode)
               customer_list.update({new_customer.username : passcode})
               print("New Customer created.")
               print(customer_list)
          elif option == "2":
               pass
          elif option == "3":
               print("Thank you for your business")
               sentinal = "n"




                    
                    
                    
               
          
          
          

if __name__ == "__main__":
     main()