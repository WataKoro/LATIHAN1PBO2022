public class DataPemain extends DataTim{
    private int nomor;
    private String posisi;

    public DataPemain(){
        this.nomor = 0;
        this.posisi = "";
    }

    public void setNomor(int no){
        this.nomor = no;
    }

    public int getNomor(){
        return nomor;
    }

    public void setPosisi(String p){
        this.posisi = p;
    }

    public String getPosisi(){
        return posisi;
    }
}