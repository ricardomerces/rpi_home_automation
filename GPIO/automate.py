import RPi.GPIO as GPIO
import sys
	
GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)

def PinOUT(pin):
	GPIO.setup(pin, GPIO.OUT)

def PortSTATE(pin, state):
	GPIO.output(pin, state)


pin = int(sys.argv[1])
state = int(sys.argv[2])


PinOUT(pin)
PortSTATE(pin, state)
