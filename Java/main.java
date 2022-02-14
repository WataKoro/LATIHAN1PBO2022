import java.util.*;

public class main{
    public static void main(String[] args){
        DataTim tim = new DataTim();
        tim.setNama("Madrid");
        tim.setAsal("Spanyol");
        tim.setTahun(1908);
        
        System.out.println("=================================");
        System.out.println("Nama  : " + tim.getNama());
        System.out.println("Asal  : " + tim.getAsal());
        System.out.println("Tahun : " + tim.getTahun());
        System.out.println("=================================");

        DataPemain pemain1 = new DataPemain();
        pemain1.setNama("Marcelo");
        pemain1.setNomor(12);
        pemain1.setPosisi("Defender");
        pemain1.setAsal("Brasil");
        pemain1.setTahun(1988);

        DataPemain pemain2 = new DataPemain();
        pemain2.setNama("Benzema");
        pemain2.setNomor(9);
        pemain2.setPosisi("Forward");
        pemain2.setAsal("Perancis");
        pemain2.setTahun(1987);

        System.out.println("=================================");
        System.out.println("Nama   : " + pemain1.getNama());
        System.out.println("Nomor  : " + pemain1.getNomor());
        System.out.println("Posisi : " + pemain1.getPosisi());
        System.out.println("Asal   : " + pemain1.getAsal());
        System.out.println("Tahun  : " + pemain1.getTahun());
        System.out.println("=================================");

        System.out.println("=================================");
        System.out.println("Nama   : " + pemain2.getNama());
        System.out.println("Nomor  : " + pemain2.getNomor());
        System.out.println("Posisi : " + pemain2.getPosisi());
        System.out.println("Asal   : " + pemain2.getAsal());
        System.out.println("Tahun  : " + pemain2.getTahun());
        System.out.println("=================================");
    }
}