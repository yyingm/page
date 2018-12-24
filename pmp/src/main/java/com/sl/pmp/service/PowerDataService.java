package com.sl.pmp.service;

import java.io.UnsupportedEncodingException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Set;

public interface PowerDataService {
	public HashMap<Object, Object> getAllPowerData() throws UnsupportedEncodingException;

	public HashMap<Object, Object> getAllPowerData4java()throws UnsupportedEncodingException;
	
	public HashMap<Object, Object> getTags(String tg)throws Exception;
	
	public ArrayList<String> getAlias(String Stg);
	
}
