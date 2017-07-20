package com.example.johir.my_project;

/**
 * Created by JOHIR on 11/11/2016.
 */
import android.content.Context;
import android.support.v7.widget.CardView;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.load.engine.DiskCacheStrategy;
import com.bumptech.glide.signature.StringSignature;
import com.daimajia.androidanimations.library.Techniques;
import com.daimajia.androidanimations.library.YoYo;
import com.squareup.picasso.Picasso;

import java.util.ArrayList;
import java.util.List;

public class MoviesAdapter extends RecyclerView.Adapter<MoviesAdapter.MyViewHolder> {

    //initialization

   private ArrayList<Data> moviesList;

    private Context mContext;
    Listener mListener;

    public class MyViewHolder extends RecyclerView.ViewHolder {
        public TextView title, year, genre;
        public ImageView imageView;
        CardView cardView;

        private Context mContext;

        public MyViewHolder(View view) {
            super(view);

            //initialization

            title = (TextView) view.findViewById(R.id.title);
            imageView=(ImageView)view.findViewById(R.id.imageViewNewsImage);
            cardView=(CardView)view.findViewById(R.id.cardView);



        }



    }

    public static interface Listener{
        public void onClick(int position);
    }

    public void setListener(Listener listener) {
        mListener = listener;
    }


    public MoviesAdapter(ArrayList<Data> moviesList,Context mContext) {
        this.moviesList = moviesList;
        this.mContext = mContext;
    }

    @Override
    public MyViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.movie_list_row, parent, false);

        return new MyViewHolder(view);
    }



    @Override
    public void onBindViewHolder(MyViewHolder holder,final int position) {
        Data data = moviesList.get(position);
        holder.title.setText(data.getTitle());   //data show textfiled

        YoYo.with(Techniques.SlideInLeft)   //animation add
                .duration(700)
                .playOn(holder.cardView);


        holder.cardView.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view){
                if(mListener != null){
                    mListener.onClick(position);         //pass postion to all fragment class
                }
            }
        });

        Ur ur=new  Ur();

      Glide.with(mContext)

           // .load("http://192.168.0.105:82/images/1477990177.JPG")
             // .load("https://nuuneoi.com/uploads/source/playstore/cover.jpg")
              .load(ur.Murl2+"/images/"+data.getImg())

              .centerCrop()
                .placeholder(R.drawable.side_nav_bar)
              .diskCacheStrategy(DiskCacheStrategy.ALL)
            .skipMemoryCache(false)                             //glide image show

               .crossFade()
                .into(holder.imageView);



     /*   Picasso.with(mContext)
                .load("http://192.168.0.100:82/images/"+data.getImg())
                .placeholder(R.drawable.side_nav_bar) // optional

                .into(holder.imageView);

       */



    }

    @Override
    public int getItemCount() {
        return moviesList.size();
    }    //size return



}


