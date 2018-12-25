package com.sl.pmp.dao;

import java.util.List;

import org.apache.ibatis.annotations.Mapper;
import org.apache.ibatis.annotations.Param;

import com.sl.pmp.entity.User;

@Mapper
public interface UserDao {
	User findUserByName(String username);

	List<User> getList(@Param (value="pagesize")Integer pagesize,@Param (value="pageindex")Integer pageindex);
}
