package com.jve;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.ComponentScan;

@SpringBootApplication
@ComponentScan(basePackages = "com.jve")  
public class PrincipalApplication {

    public static void main(String[] args) {
        SpringApplication.run(PrincipalApplication.class, args);
    }
}
