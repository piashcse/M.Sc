package com.example.johir.my_project;


import android.app.FragmentManager;
import android.app.FragmentTransaction;
import android.content.Context;
import android.graphics.Color;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.design.widget.TabLayout;
import android.view.View;
import android.support.design.widget.NavigationView;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;

import android.support.design.widget.TabLayout;
import android.support.v4.app.Fragment;

import android.support.v4.app.FragmentPagerAdapter;
import android.support.v4.view.ViewPager;
import android.support.v7.app.AppCompatActivity;




public class MainActivity extends AppCompatActivity
        implements NavigationView.OnNavigationItemSelectedListener {


    //initialization

    private String myString = "0";

    TabLayout tabLayout;
    ViewPager viewPager;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        Fragment fragment = null;
        Class fragmentClass = null;

        fragmentClass = OneFragment.class;
        try {
            fragment = (Fragment) fragmentClass.newInstance();
        } catch (Exception e) {
            e.printStackTrace();
        }
        android.support.v4.app.FragmentManager fragmentManager = getSupportFragmentManager();
        fragmentManager.beginTransaction().replace(R.id.viewPager, fragment).commit();

        ////

        //all code are for tabhost

        viewPager = (ViewPager) findViewById(R.id.viewPager);
        viewPager.setAdapter(new CustomAdapter(getSupportFragmentManager()));

        tabLayout = (TabLayout) findViewById(R.id.tabLayout);
        tabLayout.setupWithViewPager(viewPager);

        tabLayout.setOnTabSelectedListener(new TabLayout.OnTabSelectedListener() {
            @Override
            public void onTabSelected(TabLayout.Tab tab) {
                viewPager.setCurrentItem(tab.getPosition());
            }

            @Override
            public void onTabUnselected(TabLayout.Tab tab) {
                viewPager.setCurrentItem(tab.getPosition());
            }

            @Override
            public void onTabReselected(TabLayout.Tab tab) {
                viewPager.setCurrentItem(tab.getPosition());
            }
        });


        ////


        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        ActionBarDrawerToggle toggle = new ActionBarDrawerToggle(
                this, drawer, toolbar, R.string.navigation_drawer_open, R.string.navigation_drawer_close);
        drawer.setDrawerListener(toggle);
        toggle.syncState();

        NavigationView navigationView = (NavigationView) findViewById(R.id.nav_view);
        navigationView.setNavigationItemSelectedListener(this);
    }

    @Override
    public void onBackPressed() {
        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        if (drawer.isDrawerOpen(GravityCompat.START)) {
            drawer.closeDrawer(GravityCompat.START);
        } else {
            super.onBackPressed();
        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }

    @SuppressWarnings("StatementWithEmptyBody")
    @Override
    public boolean onNavigationItemSelected(MenuItem item) {
        // Handle navigation view item clicks here.
        int id = item.getItemId();
    //    Fragment fragment = null;
     //   Class fragmentClass = null;

        if (id == R.id.bd) {
            // Handle the camera action

        //    myString = "0";

            viewPager.setCurrentItem(0);       //add item means bd page

      //      fragmentClass = OneFragment.class;

        } else if (id == R.id.in) {

       //     myString = "1";
            viewPager.setCurrentItem(1);         //add item mean international page
        //    fragmentClass = TwoFragment.class;


        } else if (id == R.id.sporst) {
       //     myString = "2";

            viewPager.setCurrentItem(2);         //add item mean sports  page
      //      fragmentClass = ThreeFragment.class;

        } else if (id == R.id.economy) {

        //    myString = "3";
       //     fragmentClass = FourFragment.class;
            viewPager.setCurrentItem(3);         //add item mean  economy page

        }
//        try {
//            fragment = (Fragment) fragmentClass.newInstance();
//        } catch (Exception e) {
//            e.printStackTrace();
//        }
      //  android.support.v4.app.FragmentManager fragmentManager = getSupportFragmentManager();
     //   fragmentManager.beginTransaction().replace(R.id.viewPager, fragment).commit();

        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        drawer.closeDrawer(GravityCompat.START);
        return true;
    }

    public String getMyData() {
        return myString;
    }


    class CustomAdapter extends FragmentPagerAdapter {

        private String fragments[] = {"BD", "INTERNATIONAL","SPORTS","ECONOMY"};  //name add in tabhost

        public CustomAdapter(android.support.v4.app.FragmentManager fm) {
            super(fm);
        }


        @Override
        public Fragment getItem(int position) {
            switch (position) {
                case 0:
                    return new OneFragment();    //open when user press or click these fragment
                case 1:
                    return new TwoFragment();
                case 2:
                    return new ThreeFragment();
                case 3:
                    return new FourFragment();
                default:
                    return null;
            }
        }

        @Override
        public int getCount() {
            return fragments.length;
        }

        @Override
        public CharSequence getPageTitle(int position) {
            return fragments[position];
        }
    }
}