#include "DataTim.cpp"

int main(){
    DataTim tim;
    tim.setNama("Madrid");
    tim.setAsal("Spanyol");
    tim.setTahun(1902);

    printf("=================================\n");
    cout<<"Nama  : "<<tim.getNama()<<endl;
    cout<<"Asal  : "<<tim.getAsal()<<endl;
    cout<<"Tahun : "<<tim.getTahun()<<endl;
    printf("=================================\n");

    DataPemain pemain1;
    pemain1.setNama("Marcelo");
    pemain1.setNomor(12);
    pemain1.setPosisi("Defender");
    pemain1.setAsal("Brasil");
    pemain1.setTahun(1988);

    DataPemain pemain2;
    pemain2.setNama("Benzema");
    pemain2.setNomor(9);
    pemain2.setPosisi("Forward");
    pemain2.setAsal("Perancis");
    pemain2.setTahun(1987);

    printf("=================================\n");
    cout<<"Nama   : "<<pemain1.getNama()<<endl;
    cout<<"Nomor  : "<<pemain1.getNomor()<<endl;
    cout<<"Posisi : "<<pemain1.getPosisi()<<endl;
    cout<<"Asal   : "<<pemain1.getAsal()<<endl;
    cout<<"Tahun  : "<<pemain1.getTahun()<<endl;
    printf("=================================\n");

    printf("=================================\n");
    cout<<"Nama   : "<<pemain2.getNama()<<endl;
    cout<<"Nomor  : "<<pemain2.getNomor()<<endl;
    cout<<"Posisi : "<<pemain2.getPosisi()<<endl;
    cout<<"Asal   : "<<pemain2.getAsal()<<endl;
    cout<<"Tahun  : "<<pemain2.getTahun()<<endl;
    printf("=================================\n");
}