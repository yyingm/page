package com.sl.pmp.service;

import java.util.List;

import com.sl.pmp.entity.User;

public interface UserService {
	//根据用户名查找用户
	User findUserByName(String username);
    //返回用户列表
	List<User> getList(int pagesize,int pagenum);
}
