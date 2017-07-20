package com.example.johir.my_project;


import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;


/**
 * A simple {@link Fragment} subclass.
 */

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
public class FourFragment extends Fragment {

    //initialization
   private ArrayList<Data> movieList = new ArrayList<>();
    private RecyclerView recyclerView;
    private MoviesAdapter mAdapter;

    ProgressBar progressBar;

    String Url_data;

    int flag=1;
    int page=1;  //json request how many data show

    public FourFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view= inflater.inflate(R.layout.fragment_four, container, false);

        //initialization

        progressBar = (ProgressBar)view.findViewById(R.id.progressBar4);

        recyclerView = (RecyclerView) view.findViewById(R.id.recycler_view_four);

        mAdapter = new MoviesAdapter(movieList, getActivity());

       // recyclerView.setHasFixedSize(true);
        RecyclerView.LayoutManager mLayoutManager = new LinearLayoutManager(getActivity());
        recyclerView.setLayoutManager(mLayoutManager);
        // recyclerView.addItemDecoration(getActivity());
      //  recyclerView.setItemAnimator(new DefaultItemAnimator());
        recyclerView.setAdapter(mAdapter);

        //spcecifi item click show full data
        mAdapter.setListener(new MoviesAdapter.Listener() {
            @Override
            public void onClick(int position) {
                Data data = movieList.get(position);  //take postion
            //    Toast.makeText(getActivity(), data.getTitle()+"/nid:"+data.getId() + " is selected!", Toast.LENGTH_SHORT).show();





                Intent i = new Intent(getActivity(), Main2Activity.class); //open another class

                Bundle bundle = new Bundle();
                String venueName="my data ";
                bundle.putString("VENUE_id", data.getId());  //pass data to another class
                bundle.putString("VENUE_tb", data.getTb());
                bundle.putString("VENUE_img", data.getImg());

                i.putExtras(bundle);


                startActivity(i);
            }
        });

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
        //Ifscrolled at last then
                if (isLastItemDisplaying(recyclerView)) {
        //Calling the method getdata again
                    getData();

                    Log.d("oncanhge: ", "oncangeeee");
                }
            }
        });



            getData();




        Log.d("arraySize: ", String.valueOf(movieList.size()));

        Log.d("Flag: ", String.valueOf(flag));



        return view;
    }

    private void prepareMovieData() {

        for(int i=0;i<10;i++) {

            //Data data = new Data("this is" + i);

            //movieList.add(data);

        }

        mAdapter.notifyDataSetChanged();
    }

    private boolean isLastItemDisplaying(RecyclerView recyclerView) {
        if (recyclerView.getAdapter().getItemCount() != 0) {
            int lastVisibleItemPosition = ((LinearLayoutManager) recyclerView.getLayoutManager()).findLastCompletelyVisibleItemPosition();
            if (lastVisibleItemPosition != RecyclerView.NO_POSITION && lastVisibleItemPosition == recyclerView.getAdapter().getItemCount() - 1)
                return true;
        }
        return false;
    }

    //This method will get data from the web api
    private void getData() {
        data22();
        page++;
    }


    public void data22(){

        Log.d("arraySize: ", String.valueOf(movieList.size()));


     //   String url = "http://192.168.0.106:82/data3/n4.php?page="+page;  //this for raw php code api

        Ur ur=new  Ur();
        String url2=ur.Murl+"/admin/eo/"+page;    //this is come from laravel api blog2

        //Displaying Progressbar
        progressBar.setVisibility(View.VISIBLE);



        StringRequest stringRequest = new StringRequest(Request.Method.GET, url2,
                new com.android.volley.Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {

                        data_sent(response);              //sent data to data_sent method
                        progressBar.setVisibility(View.GONE);

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

    public void data_sent(String response){    //data pass

        try {

            JSONArray array = new JSONArray(response);    //convert json aray to string

            String da="";

            String tb="economy";
            for(int i=0; i<array.length(); i++){
                JSONObject jsonObj  = array.getJSONObject(i);
                String id= jsonObj.getString("id");              //convert json aray to string
                String  img= jsonObj.getString("img");
                String  title = jsonObj.getString("title");
                da=id+"\n"+title+"\n"+img;

                // Log.d("da:", da.toString());
                Data data = new Data(title,img,tb,id);     //pass these string to class
                movieList.add(data);                       //add data to recylerview


            }

            mAdapter.notifyDataSetChanged();

        } catch (JSONException e) {
            // Do something with the exception

        }

    }


}