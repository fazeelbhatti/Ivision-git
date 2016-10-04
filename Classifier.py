from tinyfacerec.util import *
import cv2

import numpy as np
# import tinyfacerec modules
from tinyfacerec.subspace import fisherfaces
from tinyfacerec.model import FisherfacesModel
from tinyfacerec.model import EigenfacesModel
from tinyfacerec.util import normalize, asRowMatrix, read_images
from tinyfacerec.visual import subplot
import os


class Classify:
    
    def __init__(self):
        self.model=[]
        self.X=[]
        self.Y=[]
    
    def gettestdata(self,folder='FML'):   
        testmat=[]
        num_files=np.array(os.listdir(folder)).shape[0]
        print num_files
        for i in range(0,num_files-1):
            image=cv2.imread(folder+'/Testimg' +str(i)+'.png',0)
            image=cv2.equalizeHist(image)
            testmat.append(image)    
        return num_files,testmat
    
    def getlabel(self):
        file=open('TrainData/tags.txt','r')
        label=[]
        for line in file:
            label.append(line)
        return label
    
    def gettraindata(self):
        trainmat=[]
        trainlabel=[]
   
        num_files=np.array(os.listdir('TrainData')).shape[0]
        print num_files
        for i in range(0,num_files-2):
            img=cv2.imread('TrainData/Testimg' +str(i)+'.png',0)
        #pdb.set_trace()
        #im=image.resize((50,50))
            img=cv2.equalizeHist(img)
        #_ , des = cv2.SIFT().detectAndCompute(img, None)
        #print des.shape
        # im=img.ravel()
            trainmat.append(img)
        
      
        trainlabel=self.getlabel()
        return trainmat,trainlabel
    
    def getlabel2(self):
        file=open('./FML2/tags.txt','r')
        label=[]
        for line in file:
            label.append(line)
        return label

    def gettraindata2(self):
        trainmat=[]
        trainlabel=[]
    
        num_files=np.array(os.listdir('FML2')).shape[0]
        for i in range(0,num_files-2):
            img=cv2.imread('FML2/Testimg' +str(i)+'.png',0)
            img=cv2.equalizeHist(img)
            trainmat.append(img)
        
      
        trainlabel=self.getlabel2()
        return trainmat,trainlabel
    
    def trainsystem(self):
        Xtrain1,Ytrain1=self.gettraindata()
     
        self.model = FisherfacesModel(Xtrain1, Ytrain1)
        
    def trainsystem2(self):
        Xtrain1,Ytrain1=self.gettraindata()
        #Xtrain2,Ytrain2=self.gettraindata2()
        #self.X=np.vstack((Xtrain1,Xtrain2))
        #self.Y=Ytrain1+Ytrain2
        self.model = EigenfacesModel(self.Xtrain1, self.Ytrain1)
 
        
    def predict(self,folder='FML'):
        no_files,testdata=self.gettestdata(folder)
        for i in range(0,no_files-2):
            print self.model.predict(testdata[i])


   