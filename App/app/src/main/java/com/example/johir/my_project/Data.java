package com.example.johir.my_project;

/**
 * Created by JOHIR on 11/11/2016.
 */
public class Data {


   private String id;
  private   String title;
  private   String img;


    String tb;

    public Data( String title,String img,String tb ,String id) {

        this.title = title;
        this.img = img;
        this.tb = tb;
        this.id = id;
    }


    public String getImg() {
        return img;
    }

    public void setImg(String img) {
        this.img = img;
    }


    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }


    public String getTb() {
        return tb;
    }

    public void setTb(String tb) {
        this.tb = tb;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }
}

