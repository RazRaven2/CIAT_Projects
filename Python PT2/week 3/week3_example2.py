#Converts numeric date to formatted date using dictionary.


date_string = input("Enter a date in the form of mm/dd/yyy: ")
(month, day, year) = date_string.split("/")

months = [
     "January",
     "February",
     "March",
     "April",
     "May",
     "June",
     "July",
     "August",
     "September",
     "October",
     "November",
     "December"
]

month_name = months[int(month)-1]
print(f"{month_name} {day}, {year}")
