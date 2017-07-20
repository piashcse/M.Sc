package com.example.johir.my_project;

import android.content.Context;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.InputType;
import android.util.Log;
import android.view.inputmethod.EditorInfo;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import android.content.Intent;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentActivity;
import android.support.v7.widget.DefaultItemAnimator;
import android.support.v7.widget.DividerItemDecoration;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.view.GestureDetector;
import android.view.LayoutInflater;
import android.view.MotionEvent;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Toast;
import android.support.v7.app.ActionBar;
import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.bumptech.glide.Glide;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class Main2Activity extends AppCompatActivity{

    //initialization

    TextView t1,t2;
    String id,title;

    ImageView imageView;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);

       // t1=(TextView)findViewById(R.id.textView2);

        Bundle bundle = getIntent().getExtras();
        String venid = bundle.getString("VENUE_id");
        String ventb = bundle.getString("VENUE_tb");
        String venimg = bundle.getString("VENUE_img");     //pass data to string valiable

        imageView=(ImageView)findViewById(R.id.imageViewNewsImage2);
        t1=(TextView)findViewById(R.id.textView_des);




     //   getSupportActionBar().setDisplayHomeAsUpEnabled(true);



        //Toast.makeText(getApplication(), venid+"tb"+ventb, Toast.LENGTH_SHORT).show();
        data33(venid,ventb);

        Ur ur=new  Ur();

        Glide.with(getApplication())
                .load(ur.Murl2+"/images/"+venimg)

                .placeholder(R.drawable.side_nav_bar)   //glide show image
                .crossFade()
               .into(imageView);

       // t1.setText(venName);
    }


    public void data33(final String venid , final String ventb ){
        Ur ur=new  Ur();
      //  String url = ur.Murl2+"/data/r2.php";

      String url2=ur.Murl+"/admin/des/"+ventb+"/"+venid;    //lumen api call





        StringRequest stringRequest = new StringRequest(Request.Method.GET, url2,
                new com.android.volley.Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {

                        data_sent(response);          //data pass mehotd

                    }
                }, new com.android.volley.Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {

                // Error handling
                System.out.println("Something went wrong!");
                error.printStackTrace();

            }
        });


        Volley.newRequestQueue(this).add(stringRequest);


    }

    public void data_sent(String response){   //pass string to  method

        try {

            JSONArray array = new JSONArray(response);

           String des="";
            String  title2="";
            for(int i=0; i<array.length(); i++){
                JSONObject jsonObj  = array.getJSONObject(i);
              //  String id= jsonObj.getString("id");
              //  String  img= jsonObj.getString("img");
                title2 = jsonObj.getString("title");           //convert json array to string

                des = jsonObj.getString("des");


            }


            t1.setText(des.toString());    //shoe descrpition tetxfiled


        } catch (JSONException e) {
            // Do something with the exception
        }
    }


}
