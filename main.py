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

from BeautifulSoup import BeautifulSoup

def remf(inp,outp):
	slist=[];
	soup=BeautifulSoup(read_file(inp));
	for s in soup('script'):
		slist.append(s);
		s.extract();
	data=str(soup.prettify());
	write_file(outp,data);


def scriptsep(inp,op):
	data=read_file(inp);
	start=0;
	end=0;
	scripts="";
	outp="";
	for i in range(0,len(data)-10):
		if(data[i:i+7]=="<script"):
			start=i;
			outp+=data[end:i];
		elif(data[i:i+9]=="</script>"):
			end=i+9;
			scripts+=data[start:end]+"\n";
	htmldata=BeautifulSoup(outp).prettify();
	write_file(op,htmldata+"\n"+scripts);






cmd=sys.argv[1];
if(cmd=="correct"):
	remf(sys.argv[2],sys.argv[3]);
elif(cmd=="script"):
	scriptsep(sys.argv[2],sys.argv[3]);
