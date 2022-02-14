public class DataTim{
    private String nama;
    private String asal;
    private int tahun;

    public DataTim(){
        this.nama = "";
        this.asal = "";
        this.tahun = 0;
    }

    public void setNama(String n){
        this.nama = n;
    }

    public String getNama(){
        return nama;
    }

    public void setAsal(String a){
        this.asal = a;
    }

    public String getAsal(){
        return asal;
    }

    public void setTahun(int t){
        this.tahun = t;
    }

    public int getTahun(){
        return tahun;
    }
}