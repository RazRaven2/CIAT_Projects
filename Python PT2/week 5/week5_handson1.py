#Complete Chapter 10 Programming Exercise:  4

class Employee:
     def __init__(self):
          self._name = "name"
          self._id_number = "id_number"
          self._department = "department"
          self._job_title = "job_title"

     @property
     def name(self):
          return self._name
     @name.setter
     def name(self, value):
          self._name = value
     
     @property
     def id_number(self):
          return self._id_number
     @id_number.setter
     def id_number(self, value):
          self._id_number = value

     @property
     def department(self):
          return self._department
     @department.setter
     def department(self, value):
          self._department = value

     @property
     def job_title(self):
          return self._job_title
     @job_title.setter
     def job_title(self, value):
          self._job_title = value

     def manual_update(self):
          self.name = input("Enter Employee information: \nName: ")
          self.id_number = input("ID Number: ")
          self.department = input("Department: ")
          self.job_title = input("Job Title: ")
          print("\n")
     
     def list_update(self, list, index):
          self.name = list[index][0]
          self.id_number = list[index][1]
          self.department = list[index][2]
          self.job_title = list[index][3]

     def __str__(self):
          return "\n".join([
               f"Confirm information: ",
               f"Name: {self.name}",
               f"ID: {self.id_number}",
               f"Department: {self.department}",
               f"Title: {self.job_title}"
          ])

#main function
if __name__ == "__main__":
     employee_data = [
           ["Susan Meyers", "47899", "Accounting", "Vice President"],
           ["Mark Jones", "39119", "IT", "Programmer"],
           ["Joy Rogers", "81774", "Manufacturing", "Engineer"]
     ]
     employee_1 = Employee()
     employee_2 = Employee()
     employee_3 = Employee()

     employee_1.list_update(employee_data, 0)
     employee_2.list_update(employee_data, 1)
     employee_3.list_update(employee_data, 2)

     print(employee_1)
     print(employee_2)
     print(employee_3)

