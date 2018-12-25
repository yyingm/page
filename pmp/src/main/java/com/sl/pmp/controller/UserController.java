package com.sl.pmp.controller;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;

import javax.servlet.http.HttpServletResponse;

import org.apache.catalina.servlet4preview.http.HttpServletRequest;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpRequest;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

import com.sl.pmp.entity.User;
import com.sl.pmp.service.UserService;

import net.sf.json.JSONArray;



 
@SuppressWarnings("unused")
@Controller
@RequestMapping("/user")
public class UserController {
	 @Autowired 
	 public UserService userServiceImpl;
	 @RequestMapping("/loginPag") 
	 public String loginPag(String username,String password,HttpServletRequest request){
		
			return "pmpPag/login";
 	 
	 }
	 
	 
	 
	 @RequestMapping("/login") 
	 public String login(String username,String password,HttpServletRequest request){
 		//HttpSession session =request.getSession();
	    //String sessionId;
		//用户登录
		 String msg = "";
			if(username != null && !username.equals("") && password != null && !password.equals("")) {
				 User user = userServiceImpl.findUserByName(username);
				if(user != null && user.getUsername().equals(username)) {
					if(password.equals(user.getPassword())) {
						 //session.setAttribute("username", username);
						 //session.setAttribute("password", password);
						// sessionId=session.getId();
						return  "pmpPag/menu";
	 				}else {
						msg = "密码不正确";
					}
				}else {
					msg = "用户不存在";
				}
			}else {
				msg = "用户名或密码不能为空";
			}
			//request.setAttribute("msg", msg);
			return "redirect:http://localhost:8080/user/loginPag";  
   	 }
	 @RequestMapping("/list")
	 @ResponseBody
	 public  void getlist(int pagesize,int pageindex,HttpServletResponse resp){
	 	List<User> list= userServiceImpl.getList(pagesize,pageindex);
	 	  JSONArray data = JSONArray.fromObject(list);
 	   //resp.setCharacterEncoding("utf-8");
		  PrintWriter respWritter;
		try {
			//得到输出流
			respWritter = resp.getWriter();
			// 将JSON格式的对象toString()后发送
			 respWritter.append(data.toString());
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
 	      }
 }
 
} 
	 