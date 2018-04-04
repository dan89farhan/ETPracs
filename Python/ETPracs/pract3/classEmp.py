class Emp:
    empCount=0
    def __init__(self, name, salary):
        self.name=name
        self.salary=salary
        Emp.empCount += 1
    def displayCount(self):
        print ('Total Employees %d' % Emp.empCount)

    def dispEmp(self):
        print('Name:',self.name,' Salary:',self.salary)

emp1=Emp('Vjti',2000)
emp2=Emp('Tavor',40000)
emp3=Emp('Me',1000)

print ('Total Employees %d' % Emp.empCount)