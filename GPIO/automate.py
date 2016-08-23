import RPi.GPIO as GPIO
import sys
GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)

n = int(sys.argv[1])
v = int(sys.argv[2])

def valor(num,val):
 GPIO.setup((num),GPIO.OUT)
 GPIO.output((num),(val))
	
valor(n,v)
