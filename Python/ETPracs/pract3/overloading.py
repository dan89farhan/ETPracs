class Parent:
    def myMethod(self):
        print('Calling Parent Method')
class Child(Parent):
    def myMethod(self):
        print('Calling Child Method')

c=Child()
c.myMethod()
