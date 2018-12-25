package com.sl.pmp.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.sl.pmp.dao.UserDao;
import com.sl.pmp.entity.User;
import com.sl.pmp.service.UserService;
@Service
public class UserServiceImpl implements UserService {
	 
	@Autowired
	public UserDao  userDao;

	@Override
	public User findUserByName(String username) {
		// TODO Auto-generated method stub
		return  userDao.findUserByName(username);
	}

	@Override
	public List<User> getList(int pagesize,int pagenum) {
		return userDao.getList(pagesize,pagenum);
	}
	 

}
