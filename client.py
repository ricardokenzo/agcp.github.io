import socket
import cgi
import sys


#host = '192.168.0.15'
#port = 3350  # socket server port number
#client_socket = socket.socket()  # instantiate
#client_socket.connect((host, port))  # connect to the server

client_socket=socket.socket(socket.AF_INET, socket.SOCK_STREAM)
client_socket.connect((socket.gethostname(), 1234))
#192.168.0.15
#1234


#form = cgi.Fieldstorage()
#message = form.getvalue("message")
#direction = sys.argv[1]
#slider = sys.argv[2]
#lights = sys.argv[1]
client_socket.send(sys.argv[1].encode())

#n=len(sys.argv)

#for i in range(0, n):
	
#	if (i==2):
#		send = sys.argv[1] + ":" + sys.argv[2]
#		client_socket.send(send.encode())
#		client_socket.close()
		
		
		
#	if (i==1):
#		client_socket.send(sys.argv[1].encode())

		


#direct = direction + ":" + slider

#client_socket.send(direction.encode())

#client_socket.send(direct.encode())
#client_socket.send(lights.encode())



	


client_socket.close()  # close the connection


