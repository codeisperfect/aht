import os,sys

def readfd(fd):
	data=fd.read();
	fd.close();
	return data;

def writefd(fd,data):
	fd.write(data);
	fd.close();

def read_file(fn):
	return readfd(open(fn));



def write_file(fn,data):
	writefd(open(fn,'w'),data);

def elc(c):
	return readfd(os.popen(c))




commonfiles=["php/func.php","css/lib.css"];


def flist():
	return list( ("../wwm/"+i,i) for i in commonfiles)

def copyhere():
	print ";".join(list( "cp "+f1+" "+f2 for (f1,f2) in flist()))

def copythere():
	print ";".join(list( "cp "+f2+" "+f1 for (f1,f2) in flist()))

def diffhere():
	print elc(";".join(list("diff "+f1+' '+f2 for (f1,f2) in flist() )))





if(len(sys.argv)<=1):
	diffhere();
elif(sys.argv[1]=='copy'):
	copyhere();
elif(sys.argv[1]=='copyt'):
	copythere();
else:
	print "Nothing to do ";




"#cp ../wwm/php/display.php php/"
"#cp ../wwm/modules/Fun.php modules/"
