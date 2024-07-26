# Write a program that creates a dictionary containing course numbers
# and the room numbers of the rooms where the courses meet. 
# The program should also create a dictionary containing course numbers
# and the names of the instructors that teach each course. 
# The program should also create a dictionary containing course numbers
# and the meeting times of each course. 
# The program should let the user enter a course number, then it should display the course’s room number, instructor, and meeting time.

course_room = {
     'CS101':'3004',
     'CS102':'4501',
     'CS103':'6755',
     'NT110':'1244',
     'CM241':'1411',
     '':'Error'
}
course_teacher = {
     'CS101':'Haynes',
     'CS102':'Alvardo',
     'CS103':'Rich',
     'NT110':'Burke',
     'CM241':'Lee'
}
course_time = {
     'CS101':'8:00 AM',
     'CS102':'9:00 AM',
     'CS103':'10:00 AM',
     'NT110':'11:00 AM',
     'CM241':'1:00 PM'
}

course = input("Enter Course ID for information: ")
course = course.upper()
if course in course_room:
     print(f'\nCourse: {course}\nRoom: {course_room[course]}\nInstructor: {course_teacher[course]}\nTime: {course_time[course]}')
else:
     print("Invalid selection.")