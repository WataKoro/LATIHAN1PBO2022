from DataTim import DataTim
from DataTim import DataPemain

tim = DataTim()
tim.setNama("Madrid")
tim.setAsal("Spanyol")
tim.setTahun(1908)

print('===============================')
print("Nama  : "+str(tim.getNama()))
print("Asal  : "+str(tim.getAsal()))
print("Tahun : "+str(tim.getTahun()))
print('===============================')

pemain1 = DataPemain()
pemain1.setNama("Marcelo")
pemain1.setNomor(12)
pemain1.setPosisi("Defender")
pemain1.setAsal("Brasil")
pemain1.setTahun(1988)

pemain2 = DataPemain()
pemain2.setNama("Benzema")
pemain2.setNomor(9)
pemain2.setPosisi("Forward")
pemain2.setAsal("Perancis")
pemain2.setTahun(1987)

print('===============================')
print("Nama   : "+str(pemain1.getNama()))
print("Nomor  : "+str(pemain1.getNomor()))
print("Posisi : "+str(pemain1.getPosisi()))
print("Asal   : "+str(pemain1.getAsal()))
print("Tahun  : "+str(pemain1.getTahun()))
print('===============================')

print('===============================')
print("Nama   : "+str(pemain2.getNama()))
print("Nomor  : "+str(pemain2.getNomor()))
print("Posisi : "+str(pemain2.getPosisi()))
print("Asal   : "+str(pemain2.getAsal()))
print("Tahun  : "+str(pemain2.getTahun()))
print('===============================')

