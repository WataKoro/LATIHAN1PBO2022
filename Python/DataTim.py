class DataTim():
    __nama = ""
    __asal = ""
    __tahun = 0
    
    def __init__(self):
        self.__nama = ""
        self.__asal = ""
        self.__tahun = 0
        
    def setNama(self, n):
        self.__nama = n
    
    def getNama(self):
        return self.__nama
    
    def setAsal(self, a):
        self.__asal = a
    
    def getAsal(self):
        return self.__asal
    
    def setTahun(self, t):
        self.__tahun = t
    
    def getTahun(self):
        return self.__tahun
    
class DataPemain(DataTim):
    __nomor = 0
    __posisi = ""
    
    def __init__(self):
        self.__nomor = 0
        self.__posisi = ""
    
    def setNomor(self, n):
        self.__nomor = n
    
    def getNomor(self):
        return self.__nomor
    
    def setPosisi(self, p):
        self.__posisi = p
    
    def getPosisi(self):
        return self.__posisi