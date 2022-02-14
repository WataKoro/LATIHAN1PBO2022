#include <iostream>
#include <string>
using namespace std;

class DataTim{
    private:
        string nama;
        string asal;
        int tahun;
    public:
        DataTim(){
            this->nama="";
            this->asal="";
            this->tahun=0;
        }

        void setNama(string n){
            this->nama = n;
        }

        string getNama(){
            return this->nama;
        }

        void setAsal(string a){
            this->asal = a;
        }

        std::string getAsal(){
            return this->asal;
        }

        void setTahun(int t){
            this->tahun = t;
        }

        int getTahun(){
            return this->tahun;
        }
};

class DataPemain : public DataTim{
    private:
        int nomor;
        string posisi;
    public:
        DataPemain(){
            this->nomor = 0;
            this->posisi = "";
        }

        void setNomor(int no){
            this->nomor = no;
        }

        int getNomor(){
            return this->nomor;
        }

        void setPosisi(string p){
            this->posisi = p;
        }

        string getPosisi(){
            return this->posisi;
        }
};