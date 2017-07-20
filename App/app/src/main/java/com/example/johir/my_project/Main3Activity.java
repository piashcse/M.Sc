package com.example.johir.my_project;

import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.TextView;

import com.daimajia.androidanimations.library.Techniques;
import com.daimajia.androidanimations.library.YoYo;

public class Main3Activity extends AppCompatActivity {


    TextView textView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main3);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);





        new Thread(new Task()).start();
    }

    class Task implements Runnable {

        public void run() {

            for (int i = 0; i <= 0; i++) {

                final int value = i;
                try {

                    textView=(TextView)findViewById(R.id.textView_contain_3);  //logo show my apps

                    Animation animation1 =
                            AnimationUtils.loadAnimation(getApplicationContext(),   //an animation show
                                    R.anim.slide);
                    textView.startAnimation(animation1);




                    Thread.sleep(9000);   //a nine second delay after then go main page

                } catch (InterruptedException e) {

                    e.printStackTrace();
                }

                Intent intent = new Intent(Main3Activity.this, MainActivity.class);
                startActivity(intent);




            }

        }


    }



}