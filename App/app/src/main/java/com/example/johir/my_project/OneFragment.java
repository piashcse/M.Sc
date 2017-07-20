package com.example.johir.my_project;


import android.annotation.TargetApi;
import android.content.Context;
import android.content.Intent;
import android.os.Build;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentActivity;
import android.support.v7.widget.DefaultItemAnimator;
import android.support.v7.widget.DividerItemDecoration;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.view.GestureDetector;
import android.view.LayoutInflater;
import android.view.MotionEvent;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ProgressBar;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;


/**
 * A simple {@link Fragment} subclass.
 */

public class OneFragment extends Fragment  {


    //initialization

   private ArrayList<Data> movieList = new ArrayList<>();       // data class filed are store this arraylist
    private RecyclerView recyclerView;
    private MoviesAdapter mAdapter;

    ProgressBar progressBar;


    String Url_data;
    int flag=1;

    int page=1;  //json request how many data show


    public OneFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_one, container, false);

        //initialization

        progressBar = (ProgressBar)view.findViewById(R.id.progressBar1);

        recyclerView = (RecyclerView) view.findViewById(R.id.recycler_view);

        mAdapter = new MoviesAdapter(movieList, getActivity());

       // recyclerView.setHasFixedSize(true);

        RecyclerView.LayoutManager mLayoutManager = new LinearLayoutManager(getActivity());
        recyclerView.setLayoutManager(mLayoutManager);
        // recyclerView.addItemDecoration(getActivity());
      recyclerView.setItemAnimator(new DefaultItemAnimator());
        recyclerView.setAdapter(mAdapter);

        //spcecifi item click show full data
        mAdapter.setListener(new MoviesAdapter.Listener() {
            @Override
            public void onClick(int position) {
                Data data = movieList.get(position);     //take postion

               // Toast.makeText(getActivity(), data.getTitle()+"/nid:"+data.getId() + " is selected!", Toast.LENGTH_SHORT).show();





                Intent i = new Intent(getActivity(), Main2Activity.class);  //open another class

                Bundle bundle = new Bundle();
                String venueName="my data ";
                bundle.putString("VENUE_id", data.getId());  //pass data to another class
                bundle.putString("VENUE_tb", data.getTb());
                bundle.putString("VENUE_img", data.getImg());

                i.putExtras(bundle);


                startActivity(i);
            }
        });




      /*  recyclerView.addOnScrollListener(new RecyclerView.OnScrollListener()
        {
            @Override
            public void onScrolled(RecyclerView recyclerView, int dx, int dy)

            {

                if (isLastItemDisplaying(recyclerView)) {
                    Toast.makeText(getActivity(),  " ++is selected!", Toast.LENGTH_SHORT).show();
                    page++;
                  //  remove_item();
                    data22();


                }

               // Log.d("dY:", String.valueOf(dy));
            }
        });
        */


        //below code are used for user scole then data add more

        recyclerView.addOnScrollListener(new RecyclerView.OnScrollListener() {
            @Override
            public void onScrolled(RecyclerView recyclerView, int dx, int dy) {
                super.onScrolled(recyclerView, dx, dy);
             //Ifscrolled at last then
                if (isLastItemDisplaying(recyclerView)) {
                 //Calling the method getdata again

                }
            }
        });

        //below code are used for user scole then data add more

        recyclerView.setOnScrollChangeListener( new RecyclerView.OnScrollChangeListener() {
            @Override
            public void onScrollChange(View v, int scrollX, int scrollY, int oldScrollX, int oldScrollY) {


                    if (isLastItemDisplaying(recyclerView)) {

                        getData();   //call mothod

                        Log.d("YYYYY: ", String.valueOf(scrollY));


                }
            }
        });



           getData();

      //  data22();


    //   Log.d("arraySize: ", String.valueOf(movieList.size()));




        return view;
    }

    private void prepareMovieData() {

        for(int i=0;i<10;i++) {

            //Data data = new Data("this is" + i);

            //movieList.add(data);

        }

        mAdapter.notifyDataSetChanged();
    }


    //This method will get data from the web api
    private void getData() {
        data22();
       page++;
    }
    private boolean isLastItemDisplaying(RecyclerView recyclerView) {
        if (recyclerView.getAdapter().getItemCount() != 0) {
            int lastVisibleItemPosition = ((LinearLayoutManager) recyclerView.getLayoutManager()).findLastCompletelyVisibleItemPosition();
            if (lastVisibleItemPosition != RecyclerView.NO_POSITION && lastVisibleItemPosition == recyclerView.getAdapter().getItemCount() - 1)
                return true;
        }
        return false;
    }

//    public void remove_item(){
//
//        for (int j = (movieList.size())-1; j >= 0; j--) {
//            movieList.remove(movieList.get(j));
//        }
//    }


    public void data22(){

        Log.d("arraySize: ", String.valueOf(movieList.size()));


   //  String url = "http:// 192.168.0.27:82/data3/n.php?page="+page;    //this for raw php code api

       Ur ur=new  Ur();
      String url2=ur.Murl+"/admin/bd/"+page;  //this is come from laravel api blog2


        //Displaying Progressbar
      progressBar.setVisibility(View.VISIBLE);   //progressbar visible



        StringRequest stringRequest = new StringRequest(Request.Method.GET, url2,
                new com.android.volley.Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {


                          Log.d("da:", response);
                     data_sent(response);                     //sent data to data_sent method
                     progressBar.setVisibility(View.GONE);    //progressbar gone

                    }
                }, new com.android.volley.Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {

                // Error handling
                System.out.println("Something went wrong!");
                error.printStackTrace();

            }
        });


        Volley.newRequestQueue(getActivity()).add(stringRequest);


    }

    public void data_sent(String response){       //data pass

        try {

            JSONArray array = new JSONArray(response);     //convert json aray to string

            String da="";

            String tb="bd";
            for(int i=0; i<array.length(); i++){
                JSONObject jsonObj  = array.getJSONObject(i);    //convert json aray to string
                String id= jsonObj.getString("id");
                String  img= jsonObj.getString("img");
                String   title = jsonObj.getString("title");
                da=id+"\n"+title+"\n"+img;

                //   Log.d("da:", da.toString());
                Data data = new Data(title,img,tb,id);       //pass these string to class
                movieList.add(data);                        //add data to recylerview

            }

            mAdapter.notifyDataSetChanged();

        } catch (JSONException e) {
            // Do something with the exception

        }

    }



}

