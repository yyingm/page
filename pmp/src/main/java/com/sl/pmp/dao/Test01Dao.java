package com.sl.pmp.dao;

import java.util.ArrayList;
import org.apache.ibatis.annotations.Mapper;
import com.sl.pmp.entity.Test01;
/**
 * 测试
 * @author msw
 *
 */
@Mapper
public interface Test01Dao {
	//int queryTotal(Map<String, Object> map);
	int queryTotal();
	ArrayList<Test01> queryList();
}
