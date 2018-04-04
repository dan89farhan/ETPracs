class Parent:
    parentAttr = 100
    def _init_(self):
        print('Calling parent Constructor')
    def parentMethod(self):
        print('Calling parent Method')
    def setAttr(self,attr):
        Parent.parentAttr = attr
    def getAttr(self):
        print('Parent Attribute: ',Parent.parentAttr)

class Child(Parent):
    def _init_(self):
        print('Calling Child Constructor')
    def childMethod(self):
        print('Calling Child Method')

c=Child()
c.childMethod()
c.parentMethod()
print('Before Setting New Attribute')
c.getAttr()
c.setAttr(200)
print('After Setting New Attribute')
c.getAttr()
