package com.sl.pmp.controller;

import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("/pmp")
public class HelloSpringBoot {
    @RequestMapping("/helloSpringBoot")
    public String HelloSpring (){
        System.out.println("hello spring boot");
        return "1234你好";
    }
}
