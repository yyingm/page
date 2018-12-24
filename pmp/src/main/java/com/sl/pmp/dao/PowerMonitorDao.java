package com.sl.pmp.dao;

import java.util.ArrayList;

import org.apache.ibatis.annotations.Mapper;


@Mapper
public interface PowerMonitorDao {
	ArrayList<String> getTags(String Stg);
	
	ArrayList<String> getAlias(String Stg);
}
