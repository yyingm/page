package com.sl.pmp.dao;

import java.util.List;

import org.apache.ibatis.annotations.Mapper;

import com.sl.pmp.entity.User;

@Mapper
public interface UserDao {
	User findUserByName(String username);

	List<User> getList();
}
