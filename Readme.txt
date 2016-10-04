	IVISION Facial Recognition in videos
Note:
The project utilises the following libraries and dependencies.
-ipython
-python
-sickit-learn
-sickit-image
-opencv (preferred 3.0.0)
-numpy
-webbrowser
-Running php server for web interfaces
-other dependencies are within this package

The working of the project is quite simple and straightforward. The work is done in easy to understand and excecute "iphython notebooks" using python.

All the code is contained in the main notebook; "Testfile.ipynb", which itself has been commented for better understandability.

You will need a Video to feed to the code for any kind of testing or training. Enter name of your video in the first block of the Testing or Training portion.
Note: Project is done for a classroom environment to mark attendance of students. Videos used are of classrooms.

Training Data is stored in the "TrainData" directory with currently manuaaly labelled images.
Test Data will be stored in the "TestData directory of the project.

If you want to create your own Train Data open up the notebook and run the blocks sequentially till you see the "Video Capture for Test Data" heading.
This portion will extract faces from the video which you will have to label manually using the web interface(accessed from the code itself) for the purpose of 
getting a Training Dataset.

If you want to predict results on a video start with the heading of "Train Classifier" and execute the blocks seqeuntially till the end to get a prediction.
 
The notebook itself has been commented and provided headings for better understanding.    