package com.sl.pmp.dao;

import java.util.ArrayList;

import org.apache.ibatis.annotations.Mapper;
@Mapper
public interface AlermManageDao {
	ArrayList<Object> getAlermData(String tg);
}
