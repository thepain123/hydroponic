from smbus2 import SMBus

addr = 5
bus = SMBus(1)

dataSend = "5=waterIn=0"
dataSend = dataSend.encode()
bus.write_i2c_block_data(addr, 0, dataSend)
